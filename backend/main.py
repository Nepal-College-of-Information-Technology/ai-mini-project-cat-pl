import sys
import emoji
from textblob import TextBlob

if len(sys.argv) > 1:
    text = sys.argv[1]
else:
    print("No text argument provided. Exiting.")
    sys.exit(1)

def get_sentiment(text):
    blob = TextBlob(text)
    sentiment = blob.sentiment.polarity
    sentiment = round(sentiment, 2)
    return sentiment

# parse result to float
result = get_sentiment(text)

if result > 0.3:
    print(result,"  :  very positive words !",emoji.emojize(':grinning_face_with_big_eyes:'))
elif result > 0.1:
    print(result,"  :  positive words !",emoji.emojize(':smiling_face_with_smiling_eyes:'))
elif result < -0.3:
    print(result,"  :  very negative words !",emoji.emojize(':worried_face:'))
elif result < -0.1:
    print(result,"  :  negative words !",emoji.emojize(':pensive_face:'))
else:
    print(result,"  :  neutral words !", emoji.emojize(':neutral_face:'))
