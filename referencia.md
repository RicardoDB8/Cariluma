
 # Referencia para PHP
 
 #### Si quiero ver información de la pagina:
```
<pre>
    <?php 
        var_dump($_SERVER);
        die();
    ?>
</pre>

```
#### Si quiero ver solo una linea, por ejemplo la pagina actual:
```
<pre>
    <?php 
        var_dump($_SERVER['REQUEST_URI']);
        die();
    ?>
</pre>
```