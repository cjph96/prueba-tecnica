FROM node:14.17.4-alpine as build-stage

RUN npm install -g http-server

WORKDIR /var/www/project/app

COPY package*.json ./
RUN npm install
COPY . .

#CMD  npm run serve --port80

#RUN npm run build

EXPOSE 8080
CMD [ "http-server", "dist" ]