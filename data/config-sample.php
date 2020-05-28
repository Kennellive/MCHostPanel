<?php // MCHostPanel Configuration

// Server IP Address
define('KT_LOCAL_IP','127.0.0.1');

// Prefix for GNU-Screen names (prepended to username)
define('KT_SCREEN_NAME_PREFIX','mchp-');

// Path to download server updates from (uses wget)
define('KT_UPDATE_URL_MC','http://s3.amazonaws.com/MinecraftDownload/launcher/minecraft_server.jar');
define('KT_UPDATE_URL_CB','http://dl.bukkit.org/latest-rb/craftbukkit.jar');

// Screen commands (these should never be modified)
define('KT_SCREEN_CMD_START','/opt/app-root/miniconda3/bin/tmux -u new -d -s %s /opt/app-root/miniconda3/bin/java -Dfile.encoding=UTF-8 -Xincgc -Xms%sM -Xmx%sM -jar craftbukkit.jar');
define('KT_SCREEN_CMD_EXEC','/opt/app-root/miniconda3/bin/tmux -u send -t %s "%s" ENTER');
define('KT_SCREEN_CMD_KILL','/opt/app-root/miniconda3/bin/tmux kill-session -t %s');
define('KT_SCREEN_CMD_KILLALL','killall /opt/app-root/miniconda3/bin/tmux');
define('KT_SCREEN_CMD_KILLALL_USER','for session in $(/opt/app-root/miniconda3/bin/tmux ls | /bin/grep -o \'[0-9]*\\.%s\'); do /opt/app-root/miniconda3/bin/tmux kill-session -t "${session}"; done');
