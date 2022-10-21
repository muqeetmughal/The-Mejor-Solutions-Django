from django.conf import settings

def custom_context_renderer(request):
    return {
        "SITE_TITLE": settings.SITE_TITLE,
    }