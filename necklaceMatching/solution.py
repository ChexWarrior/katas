#!/usr/bin/env python3

def same_necklace(necklace1, necklace2):
    if len(necklace1) != len(necklace2):
        return False

    if necklace1 == necklace2:
        return True

    tempNecklace = necklace1
    i = 1

    while i <= len(necklace1):
        # move a letter to end and check against necklace2
        slicedBeads = tempNecklace[i:] + tempNecklace[:i]

        if slicedBeads == necklace2:
            return True

        i += 1

    return False

print(same_necklace("nicole", "icolen"))
print(same_necklace("nicole", "lenico"))
print(same_necklace("nicole", "coneli"))
print(same_necklace("aabaaaaabaab", "aabaabaabaaa"))
print(same_necklace("abc", "cba"))
print(same_necklace("xxyyy", "xxxyy"))
print(same_necklace("xyxxz", "xxyxz"))
print(same_necklace("x", "x"))
print(same_necklace("x", "xx"))
print(same_necklace("x", ""))
print(same_necklace("", ""))