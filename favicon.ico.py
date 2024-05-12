import mmh3
import requests
import codecs
 
response = requests.get('http://212.150.106.9/favicon.ico')
favicon = codecs.encode(response.content,"base64")
hash = mmh3.hash(favicon)
print(hash)
