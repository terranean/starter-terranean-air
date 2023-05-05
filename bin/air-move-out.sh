#!/bin/bash
# A script for moving all dev files out of the theme for testing with Theme Check plugin
txtbold=$(tput bold)
boldyellow=${txtbold}$(tput setaf 3)
boldgreen=${txtbold}$(tput setaf 2)
boldwhite=${txtbold}$(tput setaf 7)
yellow=$(tput setaf 3)
green=$(tput setaf 2)
white=$(tput setaf 7)
txtreset=$(tput sgr0)

echo "${YELLOW}Moving dev files out...${TXTRESET}"
mkdir -p $HOME/air-temp
find . -name '.DS_Store' -type f -delete
find ../ -name '.DS_Store' -type f -delete
rm /var/www/airdev/content/themes/terranean-wp-starter/sass/components/.gitkeep $HOME/air-temp/
mv /var/www/airdev/content/themes/terranean-wp-starter/sass/modules/.gitkeep $HOME/air-temp/
mv /var/www/airdev/content/themes/terranean-wp-starter/.hintrc $HOME/air-temp/
mv /var/www/airdev/content/themes/terranean-wp-starter/.stylelintignore $HOME/air-temp/
mv /var/www/airdev/content/themes/terranean-wp-starter/.nvmrc $HOME/air-temp/
mv /var/www/airdev/content/themes/terranean-wp-starter/.eslintrc.js $HOME/air-temp/
mv /var/www/airdev/content/themes/terranean-wp-starter/.browserslistrc $HOME/air-temp/
mv /var/www/airdev/content/themes/terranean-wp-starter/.vscode $HOME/air-temp/
mv /var/www/airdev/content/themes/terranean-wp-starter/.svgo.yml $HOME/air-temp/
mv /var/www/airdev/content/themes/terranean-wp-starter/.accessibilityrc $HOME/air-temp/
mv /var/www/airdev/content/themes/terranean-wp-starter/.git $HOME/air-temp/
mv /var/www/airdev/content/themes/terranean-wp-starter/.gitignore $HOME/air-temp/
mv /var/www/airdev/content/themes/terranean-wp-starter/.jshintignore $HOME/air-temp/
mv /var/www/airdev/content/themes/terranean-wp-starter/.travis.yml $HOME/air-temp/
mv /var/www/airdev/content/themes/terranean-wp-starter/package.json $HOME/air-temp/
mv /var/www/airdev/content/themes/terranean-wp-starter/package-lock.json $HOME/air-temp/
# mv /var/www/airdev/content/themes/terranean-wp-starter/phpcs.xml $HOME/air-temp/
sudo mv /var/www/airdev/content/themes/terranean-wp-starter/node_modules $HOME/air-temp/
mv /var/www/airdev/content/themes/terranean-wp-starter/gulpfile.js $HOME/air-temp/
mv /var/www/airdev/content/themes/terranean-wp-starter/bin $HOME/air-temp/
mv /var/www/airdev/content/themes/terranean-wp-starter/content $HOME/air-temp/
mv /var/www/airdev/content/themes/terranean-wp-starter/__MACOSX $HOME/air-temp/
mv /var/www/airdev/content/themes/terranean-wp-starter/.scss-lint.yml $HOME/air-temp/
mv /var/www/airdev/content/themes/terranean-wp-starter/front-page.php $HOME/air-temp/
mv /var/www/airdev/content/themes/terranean-wp-starter/README.md $HOME/air-temp/
mv /var/www/airdev/content/themes/terranean-wp-starter/.stylelintrc $HOME/air-temp/
mv /var/www/airdev/content/themes/terranean-wp-starter/.editorconfig $HOME/air-temp/
mkdir -p $HOME/air-temp/template-parts
mkdir -p $HOME/air-temp/template-parts/header
mkdir -p $HOME/air-temp/template-parts/footer

# Remove custom stuff that are not part of an official WordPress theme in WP theme directory,
# Because:
# REQUIRED: The theme uses the register_taxonomy() function, which is plugin-territory functionality.
# REQUIRED: The theme uses the register_post_type() function, which is plugin-territory functionality.
rm /var/www/airdev/content/themes/terranean-wp-starter/inc/includes/taxonomy.php
rm /var/www/airdev/content/themes/terranean-wp-starter/inc/includes/post-type.php

# Screenshot, related to: https://themes.trac.wordpress.org/ticket/100180#comment:2
mv /var/www/airdev/content/themes/terranean-wp-starter/screenshot.png $HOME/air-temp/
cd /var/www/airdev/content/themes/terranean-wp-starter/
wget https://i.imgur.com/idVvQKv.png
mv -v idVvQKv.png screenshot.png

# Moving to bin dir
cd $HOME/air-temp/bin

echo "
${boldgreen}Done! Next steps:${TXTRESET}"
echo "
${boldwhite}1. Click the Check it -button: http://airdev.test/wp/wp-admin/themes.php?page=themecheck
2. Run: sh air-pack.sh (this also runs air-move-in.sh)
3. Follow instructions
${TXTRESET} "
