def timed_data(data_stream):
    return (json.loads({"data":item,"uti":item/2}) async for item in data_stream)

async def timed_data(data_stream):
    async for item in data_stream:
        makeDict = {
            "data":item,
            "uti":item/2
        }

        makeJsonString = json.loads(makeDict)
        yield makeJsonString