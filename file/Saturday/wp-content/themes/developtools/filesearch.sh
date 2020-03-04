#!/bin/sh

search_dir="../stinger8"
file_list=(`ls -F $search_dir | grep -v /`)
 
#echo ${file_list[@]}
cd $search_dir

echo "search word?"
read search_word

for var in ${file_list[@]}
do
	CMD=`cat $var | grep $search_word`
	if [ $? -ne 1 ] ; then
		echo $var
	fi 
done
