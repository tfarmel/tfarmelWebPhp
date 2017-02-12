#!/bin/sh

export ANT_HOME=ant

chmod 755 $ANT_HOME/bin/ant

$ANT_HOME/bin/ant $@
