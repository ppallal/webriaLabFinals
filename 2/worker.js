self.onmessage = function(ev)
{
	var input = parseInt(ev.data);
	for(var i = 0; i < input; i++)
	{
		continue;
	}
	postMessage(i);
}