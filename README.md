# Prueba técnica Full Stack 

Para iniciar la aplicación: 
> docker-compose up 

> Abrir http://{tu ip local}:8080 

**Es necesario abrir la aplicacion desde la ip externa para que se pueda ejecutar el script de node correctamente 

La unica funcionalidad que no he implementado es "create and run" aunque no me deberia quedar poco para terminarla. 

Ha sido una prueba muy interesante y desafiante, sobretodo en la parte de despliegue donde he notado claramente que debo seguir 
mejorando, ya que arrastré muchos errores de no haber configurado a la perfección los contenedores, como por ejemplo que no podia
enviar cabeceras json porque el CORS lo bloqueaba y que no he podido usar url relativas, sino absolutas.