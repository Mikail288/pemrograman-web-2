import numpy as np

# Data
data = [18, 22, 25, 26, 29, 30, 33, 39, 39, 54, 56, 62, 71, 78, 88, 99, 99, 99, 102, 105]

# Sort the data
data.sort()

# Calculate quartiles
Q1 = np.percentile(data, 25)
Q3 = np.percentile(data, 75)

# Interquartile range (IQR)
IQR = Q3 - Q1

# Print the IQR
print("Interquartile Range (IQR):", IQR)