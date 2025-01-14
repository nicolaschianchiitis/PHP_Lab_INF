<!DOCTYPE html>
<html>
<body>
    <?php
    /* Funzioni mds() e sha1() per criptare stringhe e sfruttarle tipicamente per nascondere password.
       Il vantaggio di tali soluzioni è che sono "one-way", cioè non esiste un algoritmo capace di decodificarle.
    */
    $password = '*miaPassW0rd23';
    $hash = md5($password);  //ca3222f9f38cfbd484a595faabfbc0b0b212297c
    $hash = sha1($password); //0cd454041832bc6ac095aecbb239be84
    print($hash);
    print('<br>');
    print(sha1($password) == $hash ? "uguali" : "no uguali");

    /* Queste funzioni non si rivelano però molto efficaci dato che online esistono moltissimi tool che attraverso 
       delle rainbow table sono in grado di restituire la stringa iniziale partendo dall'hash.
       Strategia alternativa è combinare tra di loro o applicare più volte tali algoritmi alla stringa iniziale:
    */
    $hash = md5(md5($password));
    $hash = md5(sha1($password));
    ?> 

</body>
</html>