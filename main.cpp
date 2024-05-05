#include "iostream"
#include "cmath"
#define _USE_MATH_DEFINES
#include "math.h"
#include <cstdlib>

using namespace std;

u16string chutlulu = u"chutlulu";

static char16_t dencryptChar(const char16_t charin, const int length, const int i, const bool encrypt = true) {
	double arg1 = cos(((length - (i + 1)) * M_PI));
	double arg2 = round(log10(pow(i + 1, 4.0)));
	int arg3 = chutlulu[i % 8] * 69;

	int result = (int)charin;
	if (encrypt)
		result += (int)((arg1 * 3 + arg2 + arg3));
	else
		result -= (int)((arg1 * 3 + arg2 + arg3));

	result = result % 1033;
	if (result < 0) result += 1033;
	return (char16_t)result;
}

static void dencryptText(const u16string& input, u16string& output, const bool encrypt = true) {
	for (int i = 0; i < input.size(); i++) {
		output += dencryptChar(input[i], input.size(), i, encrypt);
	}
}

int main(int argc, char** argv) {
	char doencrypt = *(argv[1]);
	u16string input;

	for (int i = 2; i < argc; i++) {
		int x = atoi(argv[i]);
		input += (char16_t)x;
		cout << x << ':' << (char16_t)x <<
	}

	u16string output;

	dencryptText(input, output, doencrypt == '1');

	for (auto ch : output) {
		cout << (int)ch << endl;
	}
	return 0;
}