FROM nginx:1.15.8

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        vim \
        joe \
        inetutils-ping \
        inetutils-traceroute \
    && rm -rf /var/lib/apt/lists/*

ADD ./nginx.conf /etc/nginx
