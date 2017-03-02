# -- coding: latin-1 --
import csv
import sys
import codecs

with open("traduzioni_mancanti.txt", "rb") as inputFile:
	reader = csv.reader(inputFile, delimiter="|")
	language = sys.argv[1]
	for row in reader: 
		if(row[1] == language):
			print 'langlookup|' + row[0].strip(' ').decode('utf-8').encode('ISO-8859-7') + '|' + row[2].strip(' ').decode('utf-8').encode('ISO-8859-7') + '|'
