from transformers import GPT2LMHeadModel, GPT2Tokenizer, GPT2Config, TextDataset, DataCollatorForLanguageModeling, TrainingArguments, Trainer

# Configurer le modèle et le tokenizer
model_name = "gpt2-medium"  # vous pouvez choisir une variante plus petite ou plus grande
tokenizer = GPT2Tokenizer.from_pretrained(model_name)
config = GPT2Config.from_pretrained(model_name)
model = GPT2LMHeadModel.from_pretrained(model_name, config=config)

# Préparez les données
train_dataset = TextDataset(tokenizer=tokenizer, file_path="path_to_train_data.txt", block_size=128)
valid_dataset = TextDataset(tokenizer=tokenizer, file_path="path_to_valid_data.txt", block_size=128)
data_collator = DataCollatorForLanguageModeling(tokenizer=tokenizer, mlm=False)

# Paramètres d'entraînement
training_args = TrainingArguments(
    per_device_train_batch_size=8,
    per_device_eval_batch_size=8,
    num_train_epochs=1, # ajustez selon vos besoins
    logging_dir='./logs',
    logging_steps=10,
    do_train=True,
    do_eval=True,
    evaluation_strategy="steps",
    save_steps=10,
    eval_steps=10,
    overwrite_output_dir=True,
    save_total_limit=2
)

trainer = Trainer(
    model=model,
    args=training_args,
    data_collator=data_collator,
    train_dataset=train_dataset,
    eval_dataset=valid_dataset
)

# Entraîner le modèle
trainer.train()
trainer.save_model("./gpt-1.h5")
