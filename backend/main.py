import sys
import test
import emoji


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

if result > 0.1:
    print(result,"  :  positive words !",emoji.emojize(':grinning_face_with_big_eyes:'))
elif result < -0.1:
    print(result,"  :  negative words !",emoji.emojize(':pensive_face:'))
else:
    print(result,"  :  neutral words !", emoji.emojize(':neutral_face:'))