# Inicio de sesión con Facebook en una aplicación PHP
Simple ejemplo de como integrar el SDK de Facebook en una aplicacion PHP para iniciar sesion con una cuenta de Facebook.

Este codigo es resultado del video-tutorial en Youtube:
https://youtu.be/LAKbqRXS6gc


Si quieres probar el codigo en tu servidor estos son los cambios que necesitas hacer:

1. En el archivo "fb_init.php", Cambia el "App-Id" y "App-Secret" por los que se generaron en la aplicacion que registraste en la pagina de developers de facebook:
https://developers.facebook.com/apps
2. En el archivo 'login-callback.php', cambia la url de redireccionamiento, tienes que poner tu URL de la localizacion de este archivo en tu servidor.
3. La anterior URL la necesitas registrar en tu Aplicacion de Facebook:
  1. En el Dashboard de tu aplicacion seleccionas "Settings".
  2. Despues seleccionas el tab "Advanced"
  3. Pegas la URL en el campo de "Valid Redirect URI"
  4. Salva los cambios con el boton que se encuentra hasta abajo.
