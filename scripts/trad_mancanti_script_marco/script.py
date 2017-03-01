import csv

with open('traduzioni_mancanti.txt', "rb") as file:
	reader = csv.reader(file, delimiter="|")
	language = "si"
	for row in reader: 
		if(row[1] == language):
			print 'langlookup|' + row[0].strip(' ') + '|' + row[2].strip(' ') + '|'
