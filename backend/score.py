from textblob import TextBlob
import sys

if len(sys.argv) > 1:
    text = sys.argv[1]
else:
    print("No text argument provided. Exiting.")
    sys.exit(1)

def get_sentiment():
    blob = TextBlob(text)
    sentiment = blob.sentiment.polarity
    sentiment = round(sentiment, 2)
    return sentiment

score = get_sentiment()
print(score)
