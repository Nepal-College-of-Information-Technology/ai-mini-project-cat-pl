from textblob import TextBlob
import sys

text = sys.argv[1]

blob = TextBlob(text)

sentiment = blob.sentiment.polarity

# set sentiment to only 2 decimal places
sentiment = round(sentiment, 2)

print(sentiment)