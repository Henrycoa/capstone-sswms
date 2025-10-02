from flask import Flask, request, jsonify
import numpy as np
import google.generativeai as genai
import os
from sklearn.ensemble import RandomForestClassifier

app = Flask(__name__)

# 🔹 Step 1: Train a Simple AI Model
model = RandomForestClassifier()
model.fit([[30, 15000, 1, 0, 1]], [1])  # Dummy training data

# 🔹 Step 2: Configure Google Gemini API
os.environ["GOOGLE_API_KEY"] = "AIzaSyA4ht0pB8o2wL0S9X1ooAfmc6XntCeDuKc"
genai.configure(api_key=os.getenv("GOOGLE_API_KEY"))

@app.route('/predict', methods=['POST'])
def predict():
    data = request.json
    input_data = np.array([[data["age"], data["income"], data["employment_status"], 
                            data["health_condition"], data["family_status"]]])
    prediction = model.predict(input_data)

    # 🔹 Step 3: Use Gemini AI for Explanation
    model_gemini = genai.GenerativeModel("gemini-pro")
    prompt = f"Explain why a {data['age']} year old with income {data['income']} might be eligible for welfare."
    explanation = model_gemini.generate_content(prompt).text

    return jsonify({"eligibility": "Eligible" if prediction[0] == 1 else "Not Eligible", 
                    "explanation": explanation})

if __name__ == '__main__':
    app.run(port=5000, debug=True)
