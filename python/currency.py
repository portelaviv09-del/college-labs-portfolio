#We just got home from a fun trip to South America, specifically Colombia, Peru, and Brazil. There's some leftover cash in:

#🇨🇴 Colombian pesos
#🇵🇪 Peruvian soles
#🇧🇷 Brazilian reais
#Create a currency.py program that asks the user for the amount they have in pesos, soles, and reais and calculates the total in USD.

pesos = float(input("What do you have left in pesos?  "))
soles = float(input("What do you have left in soles?  "))
reais = float(input("What do you have left in reais?  "))

rate_pesos = 0.00027
rate_soles = 0.30
rate_reais = 0.19

usd1 = pesos * rate_pesos
usd2 = soles * rate_soles
usd3 = reais * rate_reais

total_usd = usd1 + usd2 + usd3

print(f"The total amount of USD is ${total_usd:.2f} USD")
