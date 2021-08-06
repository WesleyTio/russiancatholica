FROM wyveo/nginx-php-fpm:latest

 FROM wyveo/nginx-php-fpm:latest
 #diretorio de trabalho para executar RUN, CMD e instnacias de da imagem do container
 WORKDIR /usr/share/nginx

#A instrução RUN especifica os comandos a serem executados e capturados na nova imagem de container
# elimina a pasta html
RUN rm -rf /usr/share/ngix/html
#cria um link simbolico que liga nosso projeto Laravel/Lumen ao container nginx
RUN ln -s public html

# COPY é uma instrução que copia arquivos e diretorios para o sistema de arquivos do container.

# ADD é como uma instrução de copia com mais recursos. Além de copiar arquivos dos host para a imagem de container, a instrução ADD também copia arquivos de um local remoto com uma especificação de URL
# CMD define um comando padrao a ser executado duante a impalntação de uma instância da imagem do container
#EX: Se o container estiver hospedado em um servidor WEB NGINX o CMD pode incluir instruções para iniciar o servidor com um comando.
#OBS: Se varias instruções CMD forem especcificadas em um Dockerfile, somente a ultima será avalidada.


