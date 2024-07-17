import cv2
import sys

def compare_images(imageA_path, imageB_path, threshold=30):
    try:
        # Debug: Print the paths being compared
        print(f"Comparing {imageA_path} and {imageB_path}")

        imageA = cv2.imread(imageA_path, cv2.IMREAD_GRAYSCALE)
        imageB = cv2.imread(imageB_path, cv2.IMREAD_GRAYSCALE)

        if imageA is None:
            print(f"Error: Image {imageA_path} could not be loaded.")
            return 0.0

        if imageB is None:
            print(f"Error: Image {imageB_path} could not be loaded.")
            return 0.0

        # Initialize the ORB detector algorithm
        orb = cv2.ORB_create()

        # Detect keypoints and descriptors
        keypointsA, descriptorsA = orb.detectAndCompute(imageA, None)
        keypointsB, descriptorsB = orb.detectAndCompute(imageB, None)

        if descriptorsA is None or descriptorsB is None:
            print("Error: Could not compute descriptors for one of the images.")
            return 0.0

        # Match the descriptors using Hamming distance and cross-check filter
        bf = cv2.BFMatcher(cv2.NORM_HAMMING, crossCheck=True)
        matches = bf.match(descriptorsA, descriptorsB)

        # Sort the matches based on distance
        matches = sorted(matches, key=lambda x: x.distance)

        # Consider the match good if the distance is less than the threshold
        good_matches = [m for m in matches if m.distance < threshold]

        # Debug: Print the number of good matches
        print(f"Number of good matches: {len(good_matches)}")

        return len(good_matches)
    except Exception as e:
        print(f"Error comparing images: {e}", file=sys.stderr)
        return 0.0

if __name__ == "__main__":
    if len(sys.argv) != 3:
        print("Usage: python compare_images.py <imageA_path> <imageB_path>")
        sys.exit(1)

    imageA_path = sys.argv[1]
    imageB_path = sys.argv[2]
    score = compare_images(imageA_path, imageB_path)
    print(score)
