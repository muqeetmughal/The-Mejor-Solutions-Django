from django.conf import settings
from django.conf.urls.static import static

from django.contrib import admin
from django.urls import path, include

from blog.sitemaps import PostSitemap
from django.contrib.sitemaps.views import sitemap
sitemaps = {
    "posts": PostSitemap,
}


urlpatterns = [
    path('admin/', admin.site.urls),
    path('', include("web.urls")),
    path('blog/', include("blog.urls")),
    path('api/', include("api.urls")),
    path('sitemap.xml', sitemap, {'sitemaps': sitemaps},
         name='django.contrib.sitemaps.views.sitemap')



]
if settings.DEBUG:
    urlpatterns += static(settings.STATIC_URL,
                          document_root=settings.STATIC_ROOT)
    urlpatterns += static(settings.MEDIA_URL,
                          document_root=settings.MEDIA_ROOT)
