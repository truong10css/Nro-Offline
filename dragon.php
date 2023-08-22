<?php
system('clear');

echo "\033[1;92m      
███╗░░░███╗░██████╗░████████╗
████╗░████║██╔═══██╗╚══██╔══╝
██╔████╔██║██║██╗██║░░░██║░░░
██║╚██╔╝██║╚██████╔╝░░░██║░░░
██║░╚═╝░██║░╚═██╔═╝░░░░██║░░░
╚═╝░░░░░╚═╝░░░╚═╝░░░░░░╚═╝░░░\n";

echo "\033[1;96m[1] SetUp\n";
echo "\033[1;932m[2] Run server\n";
echo "\033[1;92mLua chon: \033[1;33m";

$luachon = trim(fgets(STDIN));

if ($luachon == 1) {
    sleep(1);
    system('pkg install openjdk-17 -y -y && wget -O src.zip  https://github.com/truong10css/Nro-Offline/blob/main/src.zip?raw=true && unzip src.zip && clear ');
    system('rm -rf src.zip');
    system('clear');
    sleep(1);
} else if ($luachon == 2) {
    sleep(1);
    system('java -Xms2G -Xmx2G -jar dist/mad.jar');
} else {
    echo "\033[1;91mChon Sai Vui Lòng Chọn Lại\n";
    echo "\033[1;93m-------------------------------------------------------------\n";
    sleep(1);
}
?>
