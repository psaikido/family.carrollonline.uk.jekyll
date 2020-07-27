#! /bin/bash

bundle exec jekyll b
git push origin master

config="carrollonline_uk@gp-uk.net:~/family.carrollonline.uk/"
rsync -av --del /home/hughie/sites/carrollonline.uk/family.carrollonline.uk/dev/_site/ $config
