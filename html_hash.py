import mmh3
import requests

res = requests.get("http://212.150.106.9")
html = res.text
print(mmh3.hash(html))
# -2087618365
