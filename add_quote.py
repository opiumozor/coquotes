#!/usr/bin/python
#
#
# Filename: add_quote.py
# Description: Create a new entry in a json file
#
# Author: Alexis Bernard
# Email: alexis.bernard33@gmail.com
#
# Created: Thu Feb 26 18:57:53 2015 (-0800)
# Last-Updated: Fri Feb 27 09:25:56 2015 (-0800)
#           By: Alexis Bernard
#     Update #: 19
#
#

import sys
import json

FILENAME = 'quote_list.json'

def add_quote(new_quote):
    try:
        quote_list = open(FILENAME).read()
    except IOError:
        quote_list = '[]'
    entries = json.loads(quote_list)
    entries.insert(0, new_quote)
    open(FILENAME, 'w').write(json.dumps(entries, indent=2, sort_keys=True))

if __name__ == '__main__':
    if len(sys.argv) < 2:
        sys.exit("usage: " + sys.argv[0] + " [name] [quote]\n")
    add_quote({'name': sys.argv[1], 'quote': sys.argv[2]})
