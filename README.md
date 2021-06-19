# to run 
docker build . -t web
docker run -it -p 17000:1000 -p 18000:1001 -p 19000:1002 web
