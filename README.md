php Minecraft 3D Skin Renderer
=====================

Render a 3D view of a Minecraft skin using PHP.

Project first developed by [supermamie](https://github.com/supermamie/php-Minecraft-3D-skin). Later transalated to English by [cajogos](https://github.com/cajogos/php-Minecraft-3D-Skin-Renderer).
My goal was to fix some issues and hopefully create full support for the 1.8 skins (1.8 support is partly done).

*I'm no longer working on this project. I will however look into your pull-requests.*

### Run Example
Run commands:
```shell
git clone https://github.com/FlySkyPie/php-Minecraft-3D-Skin-Renderer
cd php-Minecraft-3D-Skin-Renderer
composer update
cd example
php -S localhost:8080
```

and  goes http://localhost:8080/ to check it out!

※The skin used to demostrate was download from [official](http://assets.mojang.com/SkinTemplates/steve.png), the file (or parts of it) is copyright Mojang AB.

### Usage
@TODO

### Changes Made
- Remove SVG and base64 options.
- Remove header setters
- Remove actions that could caused domain crossing.

※Those feature been removed was not what I need to used right now, so I remove it. It could added back, but those logics should separated to another objects.