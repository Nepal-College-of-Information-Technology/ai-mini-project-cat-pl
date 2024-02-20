from fastapi import FastAPI
from pydantic import BaseModel
from textblob import TextBlob

app = FastAPI()

class SentimentRequest(BaseModel):
    text: str

def get_sentiment(text):
    blob = TextBlob(text)
    sentiment = blob.sentiment.polarity
    sentiment = round(sentiment, 2)
    return sentiment

@app.post("/sentiment/")
async def analyze_sentiment(request: SentimentRequest):
    text = request.text
    result = get_sentiment(text)
    return {"sentiment_score": result}

if __name__ == "__main__":
    import uvicorn
    uvicorn.run(app, host="0.0.0.0", port=8000)
