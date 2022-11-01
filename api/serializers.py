from rest_framework import serializers

from blog.models import Comment


class ListCommentSerializer(serializers.ModelSerializer):

    class Meta:

        model = Comment

        fields = "__all__"
