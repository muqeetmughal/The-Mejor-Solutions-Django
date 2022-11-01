from django.conf import settings

from web.models import Service


def custom_context_renderer(request):

    services = Service.objects.all()
    return {
        "SITE_TITLE": settings.SITE_TITLE,
        "services": services,
    }
