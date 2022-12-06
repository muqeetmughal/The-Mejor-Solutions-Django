FROM python:3.10-alpine

ENV PYTHONUNBUFFERED=1

RUN sudo pip install --upgrade pip

WORKDIR /app

COPY requirements.txt requirements.txt

RUN pip install -r requirements.txt

COPY . .

COPY ./entrypoint.sh /
ENTRYPOINT ["sudo", "sh", "/entrypoint.sh" ]