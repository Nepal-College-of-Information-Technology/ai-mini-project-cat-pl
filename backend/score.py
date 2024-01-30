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

# parse result to float

result = float(result)

if result > 0.5:
    print("positive")
elif result < -0.5:
    print("negative")
else:
    print("neutral")

print(result)
