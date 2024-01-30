import sys
import test

text = sys.argv[1]

result = test.get_sentiment(text)

print(result)
