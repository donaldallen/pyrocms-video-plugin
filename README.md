pyrocms-video-plugin
====================

Simple video embedding plugin for PyroCMS using Lex tags. Supports YouTube and Vimeo.

## Installing
Just drag the video.php file into `addons/shared_addons/plugins`.

## Usage
The video id, width and height are not required. Width defaults to 100% and height defaults to 315. Obviously you want to include the video id. If you don't, you may be RickRolled.

### YouTube
    {{ video:youtube id="oHg5SJYRHA0" width="100%" height="315" }}

### Vimeo
    {{ video:vimeo id="42722025" width="100%" height="315" }}