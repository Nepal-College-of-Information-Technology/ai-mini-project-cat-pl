import sys
import test


def return_result(result):
    return result

if len(sys.argv) > 1:
    text = sys.argv[1]
else:
    print("No text argument provided. Exiting.")
    sys.exit(1)
result = test.get_sentiment(text)

print(return_result(result))
