from django.contrib import admin
from web.models import Contact, JobApplication, Profile, Service, Work, NewsLetter, Testimonial
# Register your models here.
admin.site.register(Profile)


class ServiceAdmin(admin.ModelAdmin):
    readonly_fields = ["slug"]
    list_display = ["name", "slug"]


class WorkAdmin(admin.ModelAdmin):
    readonly_fields = ["slug"]
    list_display = ["name", "slug"]


admin.site.register(Service, ServiceAdmin)
admin.site.register(Work, WorkAdmin)
admin.site.register(Contact)
admin.site.register(JobApplication)
admin.site.register(NewsLetter)
admin.site.register(Testimonial)
