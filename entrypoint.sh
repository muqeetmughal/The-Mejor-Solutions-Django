#!bin/sh

python manage.py migrate --noinput
python manage.py collectstatic --noinput


gunicorn config.wsgi:appication --bind 0.0.0.0:8000