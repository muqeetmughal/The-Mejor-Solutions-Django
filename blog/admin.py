from django.contrib import admin
from django import forms
from ckeditor.widgets import CKEditorWidget
from django_reverse_admin import ReverseModelAdmin

from .models import Category, Comment, Post, Seo, SeoProperty

# from rollyourown.seo.admin import register_seo_admin
from django.contrib import admin
# from blog.seo import MyMetadata
# Register your models here.


class SeoInline(admin.StackedInline):
    model = Seo


# class SeoAdmin(admin.ModelAdmin):
#     inlines = [
#         SeoPropertyInline,
#     ]


class PostAdminForm(forms.ModelForm):
    content = forms.CharField(widget=CKEditorWidget())

    class Meta:
        model = Post
        fields = '__all__'


class PostAdmin(ReverseModelAdmin):
    form = PostAdminForm
    # exclude = ('slug',)
    readonly_fields = ["author", "slug"]
    list_display = ["title", "author"]

    inline_type = 'tabular'
    inline_reverse = [
        ('seo', {'fields': ['seo_tag']}),
    ]

    def save_model(self, request, obj, form, change):
        if obj.id == None:
            obj.author = request.user
            super().save_model(request, obj, form, change)

        else:

            super().save_model(request, obj, form, change)


admin.site.register(Post, PostAdmin)
admin.site.register(Seo)
admin.site.register(SeoProperty)
admin.site.register(Comment)
admin.site.register(Category)
