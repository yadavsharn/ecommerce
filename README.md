# ModelHub – AI/ML Showcase Website  

An interactive web application that demonstrates pre-trained AI/ML models directly in the browser. Users can upload images for classification, analyze sentiment from text, and generate text summaries. Built for **Athena Education Assignment**.  

---

## 🚀 Features  

- **Image Classification** – Upload an image and get predictions (e.g., cat vs dog).  
- **Sentiment Analysis** – Analyze whether text conveys positive, negative, or neutral emotions.  
- **Text Summarization** – Generate concise summaries of long passages.  
- **Educational Section** – Simple explanations of how AI works for visitors.  
- **Fully Client-Side** – Runs in the browser with WebAssembly & WebGPU, ensuring privacy.  

---

## 🖼️ Screenshots  

### Homepage  
![Homepage](https://github.com/yadavsharn/ModelHub-AthenaEducation/blob/main/public/homepage.png)  

### Image Classification Model  
![Image Classifier](https://github.com/yadavsharn/ModelHub-AthenaEducation/blob/main/public/image%20classifier.png)  

### Text Summarizer & Sentiment Analyzer  
![Text Transformers](https://github.com/yadavsharn/ModelHub-AthenaEducation/blob/main/public/text%20transformers.png)  

---

## 🛠️ Tech Stack  

- **Frontend:** React + Vite + TypeScript  
- **UI Components:** shadcn/ui + Tailwind CSS  
- **AI Models:** Transformers.js (ONNX runtime in the browser)  

---

## ⚡ Getting Started  

### Prerequisites  
- [Node.js](https://nodejs.org/) (v18+)  
- npm or yarn  

### Installation  

```sh
# Step 1: Clone the repository
git clone https://github.com/yadavsharn/ModelHub-AthenaEducation.git

# Step 2: Navigate to the project directory
cd ModelHub-AthenaEducation

# Step 3: Install dependencies
npm install

# Step 4: Start the development server
npm run dev


Now open http://localhost:5173
 in your browser.


###🌍 Deployment
You can deploy this project easily on:

Vercel

Netlify

Any static hosting service supporting Vite builds

Build command:

npm run build


Output directory: dist/

###📌 Project Info

GitHub Repository: ModelHub-AthenaEducation

Author: Shantanu Yadav

###📜 License

This project is licensed under the MIT License.


