var test = require ('tape');

var moins = function(a, b) {
	return a -b;
}

test('try', function(test) {
	test.equal(moins(4,2),0);

	test.end;
})