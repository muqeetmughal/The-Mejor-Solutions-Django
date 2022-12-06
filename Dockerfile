FROM python:3.10-alpine

ENV PYTHONUNBUFFERED=1

RUN pip3 install --upgrade pip

WORKDIR /app

COPY requirements.txt requirements.txt

RUN pip3 install -r requirements.txt

COPY . .

COPY ./entrypoint.sh /
ENTRYPOINT ["sudo", "sh", "/entrypoint.sh" ]