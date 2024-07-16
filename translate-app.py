import requests
import re
import sys

# DeepL API key
DEEPL_API_KEY = 'insert-deepl-api-key-here'

# Function to translate text using DeepL API
def translate_text(text, target_lang='JA'):
	url = "https://api-free.deepl.com/v2/translate"
	params = {
		'auth_key': DEEPL_API_KEY,
		'text': text,
		'target_lang': target_lang,
		'source_lang': 'EN'  # Force source language to English
	}
	response = requests.post(url, data=params)
	result = response.json()
	print(result)
	if 'translations' not in result:
		print(f"Error in translation response: {result}")
		return text  # Return the original text if translation fails
	return result['translations'][0]['text']

# Function to translate text while ignoring HTML tags
def translate_ignoring_html(text, target_lang='JA'):
	# Split text into parts, separating by HTML tags
	parts = re.split(r'(<[^>]+>)', text)
	translated_parts = []
	
	for part in parts:
		if part.startswith('<') and part.endswith('>'):
			# If the part is an HTML tag, do not translate
			translated_parts.append(part)
		else:
			# Translate the non-HTML part
			translated_parts.append(translate_text(part, target_lang))
	
	# Reassemble the text
	return ''.join(translated_parts)

def main():
	if len(sys.argv) != 2:
		print("Usage: python translate-app.py <filename>")
		sys.exit(1)

	filename = sys.argv[1]

	# Read the PHP file
	with open(filename, 'r', encoding='utf-8') as file:
		content = file.read()

	# Find all text to be translated
	matches = re.findall(r"=>\s*['\"]([^'\"]*)['\"]", content)

	# Translate each text while ignoring HTML tags
	translations = {}
	for match in matches:
		translated_text = translate_ignoring_html(match)
		translations[match] = translated_text

	# Replace the original text with the translated text
	for original, translated in translations.items():
		content = re.sub(rf"=>\s*['\"]{re.escape(original)}['\"]", f"=> '{translated}'", content)

	# Write the translated content back to the PHP file
	output_filename = filename.replace('.php', '_ja.php')
	with open(output_filename, 'w', encoding='utf-8') as file:
		file.write(content)

	print(f"Translation completed and saved to {output_filename}")

if __name__ == "__main__":
	main()