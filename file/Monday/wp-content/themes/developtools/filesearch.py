# -*- coding: utf-8 -*-
import os
import sys


def file_open(path):
	for root, dirs, files in os.walk(path):


if (len(sys.argv) < 2):
	print("argument error")
	sys.exit(1)
else:
	path = sys.argv[1]
	file_list = os.listdir(path)
	dir_list = [f for f in file_list if os.path.isdir(os.path.join(path, f))]
	print(dir_list)
