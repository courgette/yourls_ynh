import json

with open("/etc/ssowat/conf.json.persistent", "r", encoding='utf-8') as jsonFile:
    data = json.load(jsonFile)
    if "protected_urls" in data:
        data["protected_urls"].append("__DOMAIN____PATH__/admin")
    else:
        data["protected_urls"] = ["__DOMAIN____PATH__/admin"]

with open("/etc/ssowat/conf.json.persistent", "w", encoding='utf-8') as jsonFile:
	jsonFile.write(json.dumps(data, indent=4, sort_keys=True))
