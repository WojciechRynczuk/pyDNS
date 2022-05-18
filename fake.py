data = b'\thowtocode\x03org\x00\x00\x01\x00\x01\x00\x00)\x10\x00\x00\x00\x00\x00\x00\x00'

def getquestiondomain(data):

    state = 0
    expectedlength = 0
    domainstring = ''
    domainparts = []
    x = 0
    y = 0

    for byte in data:
        if state == 1:
            if byte != 0:
                domainstring += chr(byte)
            x += 1
            if x == expectedlength:
                domainparts.append(domainstring)
                domainstring = ''
                state = 0
                x = 0
            if byte == 0:
                domainparts.append(domainstring)
                break
        else:
            state = 1
            expectedlength = byte
        y += 1
    questiontype = data[y + 1:y + 2]

    return (domainparts, questiontype)

if __name__ == "__main__":
    domain, type = getquestiondomain(data)
    print(domain)
    print(type)