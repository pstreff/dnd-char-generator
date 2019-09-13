FROM node:11

RUN apt-get update && \
    apt-get install -yq sudo

COPY ./entrypoint-client.sh /usr/local/bin/entrypoint-client
RUN chmod +x /usr/local/bin/entrypoint-client

RUN mkdir /app && \
    chown -R node:node /app

USER root

WORKDIR /app

ENTRYPOINT ["/usr/local/bin/entrypoint-client"]

CMD ["npm", "run", "serve"]
