<!-- Remember To Stop Press "Ctrl + C" In Terminal -->
<?php
/**  This Is Just Readline */
function readline($prompt = ""):string{if($prompt){if(is_array($prompt)){var_dump($prompt);}else {echo $prompt."";}}$fp = fopen("php://stdin","r");$line = rtrim(fgets($fp, 1024));if(empty($line)){return '';}return $line;}
# --- Input!! --- #
Warp:
$Input = (int)readline("Loop Time? > ");           # Ask Loop Time #
$Input2 = null;
if (is_numeric($Input) ) {                         # Is number #
    $Input2 = readline("Start At? > ");            # Ask Start At #
    if (is_numeric($Input2) ) {                    # Is Number #
        $start = $Input2;                          # Start = Input2 #
        # It okay Next #
    } else {                                       # Else #
        echo("'".$Input2."' Is not number!!\n");   # Say Not Number #
        $start = $Input2 = null;
    }
} else {                                           # Else #
    echo("'".$Input."' Is not number!!\n");        # Say Not Number #
    unset($Input, $Input2);
    goto Warp;                                     # Go to Warp #
}
if ($start <= 0){
    echo("Bruh it less 0\n");
    echo("Set $start to 0 . .\n");
    $start = 0;
    sleep(2);
} else {
    $start = $Input2 ?? 0;
}
for ($loop = 0; $start !== $Input; $loop++) {
    echo("Number > $loop \n");
}
##!-- -- Thank For Vist My Code :) -- --
