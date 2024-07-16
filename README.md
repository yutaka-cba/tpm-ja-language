# Introduction

このリポジトリは、Team Password Manager 日本語版のファイルを保存します。  
This repository stores the files for the Japanese language version of Team Password Manager.

## Automatic translation

`translate-app.py`のpythonスクリプトは、Deepl.comのフリーAPIを使って、英語の文字列を自動的に日本語に翻訳することができます。  
The `translate-app.py` python script can be used to automatically translate the english strings to Japanese, using Deepl.com free API.  

```bash
python3 translate-app.py <file_name>.php
```

**Notes:** The translation is not perfect, and needs to be fine-tuned afterwards. Also, strings containing apostrophes (') or unusual characters are only partially translated.

## After Translation

新しいバージョンが翻訳されたら、`config_lang.php`のバージョン番号をTPMが公開している最新バージョンに合わせてインクリメントしてください。<https://teampasswordmanager.com/docs/language-packs/> を参照してください。  
After new versions have been translated, please increment the version number in `config_lang.php` to match the latest version published by TPM. See <https://teampasswordmanager.com/docs/language-packs/>

## Clone Repo to TPM installation

`docker-host-01`の `tpm.az.cba-japan.com/sites/wmm/language` フォルダで以下を実行する：  
On `docker-host-01`, run the following in the `tpm.az.cba-japan.com/sites/wmm/language` folder:

```bash
git clone git@ssh.dev.azure.com:v3/cba-japan/TeamPasswordManager/language-jp -O ja-JP
```
